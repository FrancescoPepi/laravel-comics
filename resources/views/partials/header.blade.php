<div class="bg-header">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="img-box">
                    <img src="/images/dc-logo.png" alt="" />
                </div>

                <ul>
                    @forelse (Config('links-header') as $link)
                        <li class="menu">
                            <a href="#">
                                {{ strtoupper($link['text']) }}
                            </a>
                        </li>
                    @empty
                        <P>
                            NESSUN DATO TROVATO
                        </P>
                    @endforelse
                    <div id="select">
                        <div></div>
                    </div>
                </ul>
            </div>



        </div>
    </div>
</div>
