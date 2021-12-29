<style>
    body {
        font-family: 'Tahoma', sans-serif;
        padding: 0;
        margin: 0;
        overflow-x: hidden;
    }
    .artigos {
        border: 1px solid rgba(0,0,0, 0.2);
        flex-basis: 24.8%;
        border-bottom: 3px solid coral;
    }
    .artigos .titulo {
        font-size: 1.8rem;
        font-weight: 500;
        margin: 0;
        color: #444;
    }
    .artigos .conteudo {
        color: #555;
        font-size: 0.90rem;
    }
    .artigos .date {
        background: coral;
        padding: 4px 12px;
        color: #FFF;
    }
    .row-artigos {
        display: flex;
        flex-wrap: wrap;
        width: 90%;
        margin: 0 5%;
    }
</style>

<div class="row-artigos">
    @foreach($artigos as $artigo)
        <div class="artigos">
            <h1 class="titulo">{!! $artigo['titulo'] !!}</h1>
            <p class="conteudo">{!! $artigo['conteudo'] !!}</p>
            <span class="date">{!! $artigo['date'] !!}</span>
        </div>
    @endforeach
</div>
