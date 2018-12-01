<nav class="col-md-2 d-none d-md-block bg-secondary sidebar">
        <div class="sidebar-sticky" style="margin-left:5px;">
                <h4 style="color:#FFF; margin-top:20px;">Form 1 Topics</h4>
            <ul class="nav flex-column">
                    @foreach ($topics as $topic)
                    <li class="nav-item" >
                        <a href="#" class="nav-link active" style="color:#FFF;">{{ $topic->name }}</a>
                    </li>
                    @endforeach
                
            </ul>
        </div>
    </nav>
