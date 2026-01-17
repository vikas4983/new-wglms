<div>
    <form action="{{ $route }}" method="POST"
        onsubmit="return confirmAction()">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>
<script>
    function confirmAction(message) {
       return confirm('Are you sure you want to delete this event?'); 
       
    }
</script>