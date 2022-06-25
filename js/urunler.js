async function toplaGel() {
    let sonuc = await fetch('http://localhost/eTicaretSitesi/api.php');
    let veriler = await sonuc.json();
    // console.log(veriler)
    let html = "";
    veriler.forEach(element => {
        console.log(element.urun_ad)
        if (element.urun_ID < 15)
            html += `
            <div class="col-md-4" >
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">${element.urun_ID}</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">${element.urun_ad}</h5>
                        <p class="card-text">${element.urun_aciklama}</p>
                    </div>
                </div>
            </div>
        `
    });
    let urunlerDOM = document.querySelector('#urunler')
    urunlerDOM.innerHTML = html;
}
toplaGel();