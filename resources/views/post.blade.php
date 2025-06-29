<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 40px;
            color: #222;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        a {
            color: #3498db;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        form {
            display: inline;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        button {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background: #217dbb;
        }
        .actions {
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
