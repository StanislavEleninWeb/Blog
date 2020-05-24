@if($softDelete == null)
<div class="btn-group">
    <a href="{{ route($route.'.show', $id) }}" class="btn btn-sm btn-info">Show</a>
    <a href="{{ route($route.'.edit', $id) }}" class="btn btn-sm btn-warning">Edit</a>
    <a href="{{ route($route.'.destroy', $id) }}" onclick='event.preventDefault();
                document.getElementById("destroy-{{ $route }}-{{ $id }}").submit();'
       class="btn btn-sm btn-danger">Delete</a>
</div>
@else
@canany(['restore', 'forceDelete'], App\Role::class)
<div class="btn-group">
    <a href="{{ route($route.'.restore', $id) }}" onclick='event.preventDefault();
                document.getElementById("restore-{{ $route }}-{{ $id }}").submit();'
       class="btn btn-sm btn-success">Restore</a>
    <!-- Form Restore -->
    <form id="restore-{{ $route }}-{{ $id }}" action="{{ route($route.'.restore', $id) }}" method="POST" style="display: none;">
        @csrf
        @method('PATCH')
    </form>
    <!-- END Restore -->

    <a href="{{ route($route.'.destroy', $id) }}" onclick='event.preventDefault();
                document.getElementById("destroy-{{ $route }}-{{ $id }}").submit();'
       class="btn btn-sm btn-danger">Force Delete</a>
</div>
@endcanany
@endif

<!-- Form Delete / Force Delete -->
<form id="destroy-{{ $route }}-{{ $id }}" action="{{ route($route.'.destroy', $id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<!-- END Form Delete / Force Delete -->