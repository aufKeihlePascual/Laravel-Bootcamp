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

<h1>Create A Post</h1>
<form method="POST" action="post.store">
    <label>Subject</label>
    <input type="text" name="subject" placeholder="Enter Subject">

    <label>Message</label>
    <input type="text" name="message" placeholder="Enter Message">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
    <!-- this line is important because it won't work otherwise/>  -->

    <input type="submit" value="Save Post">
</form>