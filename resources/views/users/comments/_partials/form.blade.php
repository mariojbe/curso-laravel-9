@csrf
<div class="form-group mb-3">
    <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Comentário" autofocus>
        {{ $comment->body ?? old('body') }}
    </textarea>
</div>
<div class="form-group mb-3">
    <label for="name" class="form-label">
        <input type="checkbox" name="visible" id="visible" 
        @if (isset($comment) && $comment->visible) 
        checked="checked"
         @endif
        >
        Visível?
    </label>
</div>
<div class="d-grid gap-2">
    <input type="submit" class="btn btn-success" value="Salvar">
</div>
