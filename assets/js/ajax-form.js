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
const geolocation = () => {
	const data = new FormData();
	let ip = document.getElementById("ip").value;
	if (ip != "") {
		fetch("http://www.geoplugin.net/json.gp?ip=" + ip, {
			method: "POST",
			body: data,
		})
			.then((response) => response.text())
			.then((data) => {
				let json_data = JSON.parse(data);
				inputDataAjax(
					json_data["geoplugin_city"],
					json_data["geoplugin_region"]
				);
			})
			.catch((e) => {
				console.log(e);
			});
	}
};
const inputDataAjax = (city, region) => {
	const form = new FormData();
	form.append("kota", city);
	form.append("daerah", region);
	if (city != "" && region != "" && city != null && region != null) {
		fetch(baseURL + "home/pengunjung", {
			method: "POST",
			body: form,
		})
			.then((response) => response.text())
			.then((reply) => {
				console.log(reply);
			})
			.catch((e) => {
				console.log(e);
			});
	}
};
geolocation();