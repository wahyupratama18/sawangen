<form method="POST" action="{{ $route }}" x-data class="inline-flex">
    @method('DELETE')
    @csrf
    <x-jet-danger-button type="button" @click="
    Swal.fire({
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Kembali',
        reverseButtons: true,
        showCancelButton: true,
        title: 'Apakah anda yakin ingin menghapusnya?',
    }).then(val => {
        if (val.value) {
            $root.submit()
        }
    })
    ">
        Hapus
    </x-jet-danger-button>
</form>