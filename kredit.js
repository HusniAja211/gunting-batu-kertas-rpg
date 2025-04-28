document.addEventListener("DOMContentLoaded", function () {
    const kreditData = [
        {
            kategori: "Sumber Aset",
            items: [
                { nama: "Freepik", link: "https://www.freepik.com/free-vector/night-forest-landscape-with-trees-rocks-dark-wild-wood-natural-background-mysterious-place-with-plants-grass-ground-spots-moonlight-falling-through-crowns-cartoon-vector-illustration_21475772.htm#fromView=keyword&page=1&position=3&uuid=d058d42d-7120-401a-a9e5-b10fa6376158&query=Dark+Forest+Cartoon+Background", deskripsi: "Gambar Latar Belakang" },
                { nama: "Google Drive", link: "https://drive.google.com/file/d/1rZ0bM8qofeyh-IMknPPe7MsnYlHKJP_r/view", deskripsi: "Aset gunting, batu, kertas" },
                { nama: "Audio", link: "https://www.instagram.com/fathirrbnms/", deskripsi: "Pencipta dari backsound audio" },
            ]
        },
        {
            kategori: "Inspirasi & Referensi",
            items: [
                { nama: "CodingLab", link: "https://www.youtube.com/watch?v=RC7NbjwP3QA", deskripsi: "Inspirasi saya untuk membuat game ini" },
                { nama: "Stack Overflow", link: "https://stackoverflow.com/", deskripsi: "Solusi masalah pengkodean" }
            ]
        },
    ];

    const container = document.getElementById("kredit-container");

    kreditData.forEach((kategori) => {
        const section = document.createElement("div");
        section.classList.add("bg-gray-800", "p-6", "rounded-lg", "shadow-lg", "mb-4");

        const title = document.createElement("h2");
        title.classList.add("text-2xl", "font-semibold", "mb-2");
        title.innerText = kategori.kategori;
        section.appendChild(title);

        const list = document.createElement("ul");
        list.classList.add("list-disc", "list-inside");

        kategori.items.forEach((item) => {
            const listItem = document.createElement("li");
        
            const link = document.createElement("a");
            link.href = item.link;
            link.innerText = item.nama;
            link.classList.add("text-blue-400", "hover:underline");
            link.target = "_blank";
        
            const description = document.createTextNode(` - ${item.deskripsi}`);
        
            listItem.appendChild(link);
            listItem.appendChild(description);
            list.appendChild(listItem);
        });
        

        section.appendChild(list);
        container.appendChild(section);
    });
});
