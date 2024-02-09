<header>
    <div class="blu_stripe">

    </div>
    <div class="container">
        <img src="{{ asset('/dc_logo_icon.png') }}" alt="dc-logo">
        <div class="menu">
            <nav>
                <ul>
                    @foreach($links as $link)
                        <li class="{{ $link['current'] ? 'active' : '' }}">
                            <a href="{{ $link['url'] }}">
                                {{ $link['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header>

<style scoped lang="scss">

    .blu_stripe{
        width: 100%;
        height: 20px;
        background-color: #0282f9;
    }



    .container {
        background-color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;

        img {
            height:100px;
            padding: 15px 0;
        }

        .menu {
            display: inline-block;
            text-align: end;

            ul {
                display: flex;
                gap: 20px;
                list-style-type: none;



                li {
                    padding: 55px 0;



                    a {
                        text-decoration: none;
                        text-transform: uppercase;
                        font-weight: 600;
                        color: #707070;
                    }

                    &:hover {
                        border-bottom: 3px solid #0282f9;
                    }
                }

                .active {
                    border-bottom: 3px solid #0282f9;
                }


            }
        }
    }
    </style>
