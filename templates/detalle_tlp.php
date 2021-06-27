
<div class="card mb-3">
    <h3 class="card-header"> <h3>{{$ctrl.Peliculas.title}}</h3></h3>
    <div class="card-body">
        <h5 class="card-title">{{$ctrl.Peliculas.original_title}} {{$ctrl.Peliculas.release_date}}</h5>
        <h6 class="card-subtitle text-muted"><section class="col align-self-sm-end" ng-show="$ctrl.Peliculas.homepage"><h6><a href=" {{$ctrl.Peliculas.homepage}}" class="link-danger">HomePage</a></h6></section></h6>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
        <rect width="100%" height="100%" fill="#868e96"></rect>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
    </svg>
    <div class="card-body">
                   <h3>Resumen</h3><p class="card-text">{{$ctrl.Peliculas.overview}}</p>
                    <figure>
                        <img ng-src="https://image.tmdb.org/t/p/w500{{$ctrl.Peliculas.poster_path}}" class="img-fluid rounded">
                        <figcaption>Imagen del poster de la pelicula:{{$ctrl.Peliculas.original_title}}</figcaption>
                    </figure>
                    <div>
                        <span  data-ng-repeat="c in $ctrl.Peliculas.genres"> <span class="badge rounded-pill bg-primary">{{c.name}}</span></span>
                    </div>

                    <div data-ng-repeat="t in $ctrl.Trailers">
                        
                    </div>

    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>


</div>