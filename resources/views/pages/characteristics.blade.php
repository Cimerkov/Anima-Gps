@extends('layouts.default')
@section('content')


<div class="container-fluid text-center" style="margin-top:60px;">

    <div class="row pt-5">
        <div class="col-8">

            <img src="/images/3.png" alt="3" style="width:100%; padding-top: 120px;">

        </div>
        <div class="col-4 px-5">
            <h4 class="text-uppercase fw-bold">View and monitor your entire fleet in real time</h4>
            <div class="pt-2">
                <div class="d-flex">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path d="m15 4.946-6-2-7 2.333v16.108l7-2.333 6 2 7-2.333V2.613zm-5 .442 4 1.333v11.891l-4-1.333zM4 6.721l4-1.333v11.891l-4 1.334zm16 10.558-4 1.333V6.721l4-1.334z" />
                        </svg>
                    </div>
                    <p class="text-uppercase fw-bold">View different types of maps from multiple providers</p>


                </div>
                <div>
                    <p style="text-align:justify;">There are several offered maps such as Google Street and Google Satellite, truck map - Here Truck, our own map of Macedonia, Open Street.</p>
                </div>
            </div>


            <div class="pt-2">
                <div class="d-flex">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <g data-name="47.World">
                                <path d="M12 24a12 12 0 1 1 12-12 12.013 12.013 0 0 1-12 12zm0-22a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2z" />
                                <path d="m4.707 19.707-1.414-1.414L4.586 17h2L8 15.586v-3.822l1-2V8.236L8.382 7H6.697L3.445 4.832l1.11-1.664L7.303 5h2.315L11 7.764v2.472l-1 2v4.178L7.414 19h-2l-.707.707zM16.293 22.707 13 19.414v-1.828l2-2v-.35l-1-2v-2.65l2.178-2.178L16.882 7l-1-2 1.223-2.447 1.79.894L18.118 5l1 2-1.296 2.592L16 11.414v1.35l1 2v1.65l-2 2v.172l2.707 2.707-1.414 1.414z" />
                            </g>
                        </svg>
                    </div>
                    <p class="text-uppercase fw-bold">Display of the current location and various parameters of the vehicle</p>


                </div>
                <div>
                    <p style="text-align:justify;">Apart from the current location, it is possible to monitor the movement speed, battery voltage, mileage, fuel, revolutions and temperature of the engine, info about the contact of the vehicle, etc.</p>
                </div>
            </div>

            <div class="pt-2">
                <div class="d-flex">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path d="M18,4.48a8.45,8.45,0,0,0-12,12l5.27,5.28a1,1,0,0,0,1.42,0L18,16.43A8.45,8.45,0,0,0,18,4.48ZM16.57,15,12,19.59,7.43,15a6.46,6.46,0,1,1,9.14,0ZM9,7.41a4.32,4.32,0,0,0,0,6.1,4.31,4.31,0,0,0,7.36-3,4.24,4.24,0,0,0-1.26-3.05A4.3,4.3,0,0,0,9,7.41Zm4.69,4.68a2.33,2.33,0,1,1,.67-1.63A2.33,2.33,0,0,1,13.64,12.09Z" />
                        </svg>
                    </div>
                    <p class="text-uppercase fw-bold">Points of interest that your company needs to work more efficiently</p>


                </div>
                <div>
                    <p style="text-align:justify;">A point of interest can be any location or facility that would be of interest to your company. You can mark them with different icons as you wish and enter a radius for them.</p>
                </div>
            </div>

            <div class="pt-2">
                <div class="d-flex">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M4 15V8.5a4.5 4.5 0 0 1 9 0v7a2.5 2.5 0 1 0 5 0V8.83a3.001 3.001 0 1 1 2 0v6.67a4.5 4.5 0 1 1-9 0v-7a2.5 2.5 0 0 0-5 0V15h3l-4 5-4-5h3zm15-8a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </g>
                        </svg>
                    </div>
                    <p class="text-uppercase fw-bold">Truck or car movement routes for movement route optimization</p>


                </div>
                <div>
                    <p style="text-align:justify;">Overview of the distance, time, how many roads there are with tolls and if you are driving in several different countries it will divide the road for you step by step in each country with the same information.</p>
                </div>
            </div>



        </div>

    </div>



    <div class="row py-5">

        <div class="col-4 px-5">
            <h4 class="text-uppercase fw-bold">Review motion history and fuel control</h4>
            <div class="pt-2">
                <div class="d-flex">
                    <div> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAv0lEQVRIie2TwQ7BQBRFTwXRPeEvBBv6t3wW4ScIu04XTDMZ03mvNU1E3OSt2ndu720e/PWtOgAmMFahZ/s2BqcOBkctfAqUHQxKYObDBgGDAsi0X+MoA7Yag10E4icRd9saSBJ3h8CVcMfSPzDA7cVo1CayrDEwwNoF+hV9Uk+Q0buBrwvx+Jo5N8HnCeB2FhbqVlQI0eF5TJojrA/ONUjR/xurdwOrEXBH7tZKeu8BjN0EKyBPmGACLBPyflkVVc56/5wKr5QAAAAASUVORK5CYII=">
                    </div>
                    <p class="text-uppercase fw-bold">Graphical and tabular display of all trips and stops for the selected period</p>


                </div>
                <div>
                    <p style="text-align:justify;">Each trip is marked on the map with a special color that gives a visual overview of the movement, and each stop is marked with a marker and indicated where and how long it was stopped.</p>
                </div>
            </div>


            <div class="pt-2">
                <div class="d-flex">
                    <div> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAbElEQVRIie2VQQrAIAwEF+3/X9WDj7LYk1AWEVNqlLIDHuIhQ7KCgBAbcQIoj5O8xJnEBUC0NgnUzNyAMG/DIu5NPLyN0Lr0YDux28vljN/mqIwllljiH4srX/3Hwyyb+KA6T3ZdtViesZjODeCiNZeXQwyDAAAAAElFTkSuQmCC">
                    </div>
                    <p class="text-uppercase fw-bold">Graph showing movement speed, fuel level and various sensors.</p>


                </div>
                <div>
                    <p style="text-align:justify;">A clear and easy-to-use graph that shows all the essential data, from speed and fuel, to various sensors. Display of filling / removing fuel.</p>
                </div>
            </div>




        </div>
        <div class="col-8">

            <img src="/images/4.png" alt="4" style="width:100%;">

        </div>

    </div>




    <div class="row py-5">
        <div class="col-8">

            <img src="/images/5.png" alt="3" style="width:100%;">

        </div>
        <div class="col-4 px-5">
            <h4 class="text-uppercase fw-bold">Generating different types of fleet reports</h4>
            <div class="pt-2">
                <div class="d-flex">
                    <div> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABmUlEQVRIie2UsU7cQBBAn/fQKRKkv5t10BWkyBdEQkGpCZ+QKilOokYiTSQUKU0i0edSQJVfoKIjNHwATVKcZN/eB6QIOsEOBYtwfD4bW5DKr/J6ZudpdkcLLS0NsdZuiUgqIkmv19vMx81jiVX1G2CB2BgzaizOdhDH8Zuy3H6/vxGkC7m3ONuB934ELBXlicj7KIqOgQj4AySqOsznRVXCwWDwZDabfQJ2c6FfURR9nkwmP4AroCMiX4CdEN93zn0IsTlKxXEcv/TeHwIvQgHHzSn9BdZC2m9gGVgBngIzYNs5d1BWe05srd1S1RGgQB/oAOfGmHdpmp6FtI619q2qfgSeZ7arqr6eTqcnZdJCsYgkQJz59bXb7e6Nx+OLgv1LIjLmbpAS59xqlRQWDEiGJNzTIi6NMcMwbJodIhE5BdbD8qdzbqNU7L0fGmO+5wstIk3TI+BZQWg98/0qH6yc6luqOijI1+zaOfePq87LVdpBXaruuJK6J3HLQ7zVjU5iruOmHdSlqOMHvcs64v9CK27FLS2NuQbjNYuXHT32uwAAAABJRU5ErkJggg==">
                    </div>
                    <p class="text-uppercase fw-bold ms-2">Daily, weekly and monthly reports for every purpose.</p>


                </div>
                <div>
                    <p style="text-align:justify;">Some of the reports offered are: Standard Report, Fleet Report, Stops Report, Driver Report, Route Report, Entry Report, etc.</p>
                </div>
            </div>


            <div class="pt-2">
                <div class="d-flex">
                    <div> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAAB+ElEQVRYhe3XzYtOURwH8M8zWFhaKKNRYustL1nRhFlRysbbQllYyk4WpFjIyn+AhkJeSiNLFmZCShaS2E0pJCWJ8fJYnPtw3O4z55ybYjHfuot77u/le873d37nXGbwj9HJsFmPlS1idzGKYQzgdjVWhK34UTmWPldwPHo/1ZRgIEFgWN4qNeFhNYEetrUhMLtlcvhW85/TJkFv9l3swMfo2wYca8uulEAHN1rEvyZIAa/bEEhJlMLJlEGJBAcxlbDfiU1pXuUEOjicQWBBSfIcArEEQ6XBa74L/a6HbAKxBGekV2AEq2tj87EK57Ed90oI9FaggzUZBOoSLMIdTOAArmIxPucSiLvgxoRtjBe4XyVfWj1fsSJOXkrgJr4k7NcJq7QPF6rEquS38KbukCtBF++qQNPhMU7jIpZEyXfhesK3EWfln36fBH2fRWNTQgvvi5Jt+FRNvwjL8QCDOILLgny7JWZesg0v6S/BPIzjKN4LHXGWcBZMi5JteCJhO4EPggSvpLfsHwn6oeQyskc4os/hETbnOKVWYAyTGXH2Y29OwhSBIaHySzAqFOjw3yAwF1sKY4xrvu1m3YDrNTAp3e3qGMTLhvHnhXF+4RC+y29Ab7FWqPze2JjM21S/Kl8m9PXGm2wDnggzHhFa9l3hf2IG/z9+Aq8ShHxWqLp+AAAAAElFTkSuQmCC">
                    </div>
                    <p class="text-uppercase fw-bold">Automatic generation and sending of reports for the selected period</p>


                </div>
                <div>
                    <p style="text-align:justify;">By specifying a period and choosing the kind of report you want, every day, week or month you will receive a generated report with all the data on your e-mail.</p>
                </div>
            </div>

            <div class="pt-2">
                <div class="d-flex">
                    <div> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABT0lEQVRYhe3Xvy4EURTH8c9aFYmgESJKhJZINEQ0ItF5BQ9he0+g8RYKhUQICkHQaGhUQqjEn0SBVexusiaD2Zmb2WZ/yWRy58w95zvzu2duhpaarEJk3IU1TKKYYP47VnEYCmgd5QaPV8yGAjhJARAU4iwlQBlvmGsmQBCIrACZIUIA1NbEeJKCbWlJ/1EnpuvGBcyjJy+AWtGalrCDI/TnBVCvczxgFHv1EHkB3GIG91WIfQxAe4akH3j5I1700/NHLGMLw9gV0y1Ju+ANg/8AbiTIc5HFguhGlkppLejAjb8tKKE3cm1MxYJuXGExOinUh6iMlUjuEdxVY9cCLMJGNIQD9Kk8+ZxKR+TWhhNxxcnvDWxiAcd4qg/kBfCF7bhAXhb8qhZAFOAzYO5EuaIAJ4GKf+E0yY3RLihVz1OS/ZjE6VllI7pMOb+lfPUNcp6zBl0jZ9AAAAAASUVORK5CYII=">
                    </div>
                    <p class="text-uppercase fw-bold ms-2">Export of generated reports in PDF or Excel format</p>


                </div>

            </div>





        </div>

    </div>
    <div>
        <h3 class="pt-5 text-uppercase fw-bold">Mobile application</h3>
        <p class="py-1 fw-bold text-uppercase">Access all important parameters for your fleet from your mobile phone or tablet.</p>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide pb-5" data-bs-ride="carousel">
        <div class="carousel-inner" style="text-align: -webkit-center;">
            <div class="carousel-item active">
                <img style="height:500px" src="images/2.png" class="d-block rounded " alt="...">
            </div>
            <div class="carousel-item">
                <img style="height:500px" src="images/6.png" class="d-block rounded " alt="...">
            </div>
            <div class="carousel-item">
                <img style="height:500px" src="images/7.png" class="d-block rounded " alt="...">
            </div>
        </div>
    </div>

</div>









@stop