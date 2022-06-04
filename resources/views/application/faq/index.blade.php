@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <!-- Accordion: Alternative style -->
            <div class="accordion" id="accordionAlt">

                <!-- Item -->
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Accordion Item
                            #1</button>
                    </h3>
                    <div class="accordion-collapse collapse show" id="collapseFour" aria-labelledby="headingFour"
                        data-bs-parent="#accordionAlt">
                        <div class="accordion-body pt-0">This is the first item's accordion body. It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                    </div>
                </div>

                <!-- Item -->
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="headingFive">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">Accordion Item #2</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive"
                        data-bs-parent="#accordionAlt">
                        <div class="accordion-body pt-0">This is the second item's accordion body. It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                    </div>
                </div>

                <!-- Item -->
                <div class="accordion-item border-0 rounded-3 shadow-sm">
                    <h3 class="accordion-header" id="headingSix">
                        <button class="accordion-button shadow-none rounded-3 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">Accordion Item #3</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix"
                        data-bs-parent="#accordionAlt">
                        <div class="accordion-body pt-0">This is the third item's accordion body. It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each element.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
