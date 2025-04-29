Hello World

{{ $posts }}

@foreach ($posts as $singlePost)
    <ul>
        <li>ID: {{ $singlePost->id }}</li>
        <li>Subject: {{ $singlePost->subject }}</li>
        <li>Message: {{ $singlePost->message }}</li>
        <li>Created At: {{ $singlePost->created_at }}</li>
        <li>Updated At: {{ $singlePost->updated_at }}</li>
    </ul>
@endforeach