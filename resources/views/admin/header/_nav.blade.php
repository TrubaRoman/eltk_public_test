@if($count != null)
<li>
    <a href="{{route('contacts.index')}}">
        <b> Nowe wiadomości:  </b> <i class="fa fa-envelope-o"></i>
        <span class="label label-success">{{$count}}</span>
    </a>
</li>
@endif

