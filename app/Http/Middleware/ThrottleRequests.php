<?php

    namespace App\Http\Middleware;
    use Closure;
    use Illuminate\Http\Exceptions\ThrottleRequestsException;
    use Illuminate\Routing\Middleware\ThrottleRequests as
        BaseThrottleRequests;

    class ThrottleRequests extends BaseThrottleRequests
    {
        public function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '')
        {
            $key = $prefix.$this->resolveRequestSignature($request);

            $maxAttempts = $this->resolveMaxAttempts($request, $maxAttempts);

            if ($this->limiter->tooManyAttempts($key, $maxAttempts)) {
                throw $this->buildException($key, $maxAttempts);
            }

            $this->limiter->hit($key, $decayMinutes * 60);

            $response = $next($request);

            return $this->addHeaders(
                $response, $maxAttempts,
                $this->calculateRemainingAttempts($key, $maxAttempts)
            );
        }

        protected function buildException($key, $maxAttempts)
        {
            $retryAfter = $this->getTimeUntilNextRetry($key);

            $headers = $this->getHeaders(
                $maxAttempts,
                $this->calculateRemainingAttempts($key, $maxAttempts, $retryAfter),
                $retryAfter
            );

            return new ThrottleRequestsException(
                __('throttle.limitrequests',['seconds' => $retryAfter])
                , null, $headers
            );
        }
    }