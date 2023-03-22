@props(['posts'])
<table border="1">
    <thead>
    <tr>
        <th>{{ __('Author') }}</th>
        <th>{{ __('Title') }}</th>
        <th>{{ __('Content') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->author }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
