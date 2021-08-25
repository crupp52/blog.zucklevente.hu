<tr>
    <td class="align-middle text-center">
        <p class="text-xs font-weight-bold mb-0">
            {{ $post->id }}
        </p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0">
            {{ \Illuminate\Support\Str::limit($post->title, 50) }}
        </p>
    </td>
    <td>
        <p class="text-xs font-weight-bold mb-0">
            {{ $post->getShortContent(100) }}
        </p>
    </td>
    <td>
        <form action="{{ route('admin.post.destroy', ['post' => $post]) }}" method="POST">
            @csrf
            @method('POST')
            <a class="btn btn-warning mb-0" href="{{ route('admin.post.edit', ['post' => $post]) }}"><i class="fa fa-edit"></i></a>
            <button class="btn btn-danger mb-0"><i class="fa fa-times"></i></button>
        </form>
    </td>
</tr>