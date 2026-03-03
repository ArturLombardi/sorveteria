document.addEventListener('DOMContentLoaded', function () {

    //PHOTO

    const inputPhoto = document.getElementById('photo')
    const photoPreview = document.getElementById('photoPreview')

    if (!inputPhoto || !photoPreview) return

    const defaultImage = photoPreview.dataset.default

    inputPhoto.addEventListener('change', function () {
        const file = this.files[0]

        if (!file) {
            photoPreview.src = defaultImage
            return
        }

        if (!file.type.startsWith('image/')) {
            alert('Selecione uma imagem válida')
            this.value = ''
            photoPreview.src = defaultImage
            return
        }

        const reader = new FileReader()
        reader.onload = e => photoPreview.src = e.target.result
        reader.readAsDataURL(file)
    })

    //FULL NAME

    const FULL_NAME = document.getElementById('full_name');
    const ERROR_FULL_NAME = document.getElementById("error_full_name");

    FULL_NAME.addEventListener('blur', () => {
        const name = FULL_NAME.value.trim();

        if (name.length < 3) {
            showError('Nome deve ter pelo menos 3 caracteres');
        } else {
            clearError();
        }

    });

    function showError(menssage) {
        FULL_NAME.classList.add('input-error');
        ERROR_FULL_NAME.textContent = menssage;
        ERROR_FULL_NAME.classList.remove('hidden');
    }

    function clearError() {
        FULL_NAME.classList.remove('input-error')
        ERROR_FULL_NAME.classList.add('hidden')
    }



})
