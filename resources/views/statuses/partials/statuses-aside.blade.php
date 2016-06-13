<div class="panel panel-default">
    <ul class="small-font">
        <li>{{ $user->username }}</li>
        <li>Statusi: {{ count($user->status) }}</li>
        <li>Following: {{ count($user->follows) }}</li>
        <li>Followers: {{ count($user->followers) }}</li>
    </ul>
</div>

<br>