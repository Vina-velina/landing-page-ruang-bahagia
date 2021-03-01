const ajaxSend = (e) => {
	e.preventDefault();
	const data = new FormData();
	let nama = document.getElementById("nama");
	let email = document.getElementById("email");
	let pesan = document.getElementById("pesan");
	data.append("nama", nama.value);
	data.append("email", email.value);
	data.append("pesan", pesan.value);
	if (nama != "" && email != "" && pesan != "") {
		fetch(baseURL + "home/send_email", {
			method: "POST",
			body: data,
		})
			.then((response) => response.text())
			.then((data) => {
                if (data == true) {
                    nama.value = "";
                    email.value = "";
                    pesan.value = "";
                    success();
                } else {
                    error();
                }
			})
			.catch((e) => {
				console.log(e);
			});
	}
};

const success = () => {
	Swal.fire({
		position: "center",
		icon: "success",
		text: "Email Anda Berhasil Dikirim",
		showConfirmButton: true,
	});
};

const error = () => {
	Swal.fire({
		position: "center",
		icon: "error",
		text: "500 - Internal Server Error, Email Anda Gagal Dikirim",
		showConfirmButton: true,
	});
};