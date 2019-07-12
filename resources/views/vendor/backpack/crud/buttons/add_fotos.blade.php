<a class="btn btn-xs btn-default addImg" data-style="zoom-in">
    <span class="ladda-label">
        <i class="fa fa-plus"></i>
        {{ trans('backpack::crud.add') }} Fotos
    </span>
</a>

<script defer>
    let mdiv = $("#imgModal");
    $(".addImg").on('click', () => {
        $.ajax({
            url: "{{ route('addImg', $entry->getKey()) }}"
        }).then((e) => {
            mdiv.html(e)
        });
        mdiv.modal().toggle()
    })
</script>
