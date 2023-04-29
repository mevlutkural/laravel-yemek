document.querySelectorAll(".list-delete-item").forEach((element) => {
    element.addEventListener("click", (e) => {
        e.preventDefault();

        if (confirm("Bu işlemi yapmak istediğinize emin misiniz?")) {
            axios
                .delete(element.getAttribute("data-url"), {
                    _token: document
                        .querySelector('meta[name="csrf-token')
                        .getAttribute("content"),
                })
                .then((res) => {
                    alert("Kullanıcı başarıyla silindi.");
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                })
                .catch((err) => {
                    console.log(err);
                });
        }
    });
});
