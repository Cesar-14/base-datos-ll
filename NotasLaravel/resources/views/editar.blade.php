
        @extends('layout')
        
        @section('content')

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item">
                        <a href="/static/notes.html" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="/static/add-note.html" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Editar nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>Editar nota</h1>

                        <form action="">
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input" value="{{ $notas->titulo }}">

                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea"> {!! $notas->contenido !!} </textarea>

                            <button type="submit" class="btn btn-primary">Editar nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        @endsection