<section>
  <!-- <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Toggle width collapse
  </button>
</p>
<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div> -->


  <fieldset style="background-color: thistle; max-width: fit-content; border: 1px solid royalblue;">
    <h5 style="padding-top: 1rem; padding-left: 0.5rem; padding-right: 0.5rem;">Odabir po kategorijama</h5>
    <hr>
    <div class="form-check" style="margin-left: 1rem;">
      <input class="form-check-input" type="checkbox" value="" id="cbDomacaKuhinja">
      <label class="form-check-label" for="flexCheckDefault">Domaća kuhinja</label>
    </div>
    <div class="form-check" style="margin-left: 1rem;">
      <input class="form-check-input" type="checkbox" value="" id="cbStranaKuhinja">
      <label class="form-check-label" for="flexCheckChecked">Strana kuhinja</label>
    </div>
    <div class="form-check" style="margin-left: 1rem;">
      <input class="form-check-input" type="checkbox" value="" id="cbSlatko">
      <label class="form-check-label" for="flexCheckDefault">Slatko</label>
    </div>
    <div class="form-check" style="margin-left: 1rem;">
      <input class="form-check-input" type="checkbox" value="" id="cbSlano">
      <label class="form-check-label" for="flexCheckChecked">Slano</label>
    </div>
    <div align="center" style="margin-top: 0.5rem;">
      <button class="btn btn-primary btn-sm" type="submit">
        Pretraga <i class="bi bi-search" style="font-size: smaller; color:white"></i>
      </button>
    </div> <br>
  </fieldset> <br>

  Sa desne strane od filtriranja implementirati listu svih recepata


  <!-- Toast container -->
  <div class="toast" id="myToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
    <div class="toast-header bg-info">
      <strong class="me-auto">Savet</strong>
    </div>
    <div class="toast-body">
      Ukoliko znate tačan naziv recepta, koristite pretraživač u gornjem desnom uglu
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</section>