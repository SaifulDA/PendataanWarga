const flashData = document
	.getElementById("flash-data")
	.getAttribute("data-flashdata");
const btnHapus = document.getElementById("btn-hapus");

if (flashData) {
	Swal.fire({
		icon: "success",
		title: "Data Warga",
		text: flashData,
	});
}

btnHapus.addEventListener("click", function (e) {
	e.preventDefault();

	const href = this.getAttribute("href");

	Swal.fire({
		title: "Data Warga",
		text: "Apakah anda yakin ingin menghapus data ini?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya,Hapus!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
