<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <input type="file" multiple id="drop" name="imagens" />
        </div>
    </div>
</div>

<script defer>
    $("#drop").fileinput({
        uploadUrl: "{{ route('saveFoto', $id) }}",
        language: 'pt-BR'
    });
</script>
