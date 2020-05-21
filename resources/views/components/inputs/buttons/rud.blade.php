<div class="btn-group">
    <a href="{{ route($route.'.show', $id) }}" class="btn btn-sm btn-info">Show</a>
    <a href="{{ route($route.'.edit', $id) }}" class="btn btn-sm btn-warning">Edit</a>
    <a href="#" onclick="event.preventDefault();
                document.getElementById('destroy-role_{{ $id }}').submit();">
        {{ __('Logout') }} class="btn btn-sm btn-danger">Delete</a>
    <form id="destroy-role_{{ $id }}" action="{{ route('admin.role.destroy', $id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</div>