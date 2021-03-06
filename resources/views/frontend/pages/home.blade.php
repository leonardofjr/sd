@extends('layouts.default')
@section('content')
<div class="fullwidth-row">
   <section class="container">
            <h2 class="text-center">We are a local web design & development company based in Markham</h2>
            <p class="pb-5">
                
            </p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="">
                            Startup Designs is a full-service digital shop, specialising in web design & Drupal website development and we can help your business with branding and an online presence.
                    </p>
                    <p>
                            Our experienced web developers will integrate a CMS platform such as Drupal or WordPress and custom fit your design so that it\'s easy to use and scalable for the future.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="">
                            We produce exceptional designs that are made-to-measure. We work through a creative process to design and develop a suitable identity and User eXperience which greatly factors in your audience.
                    </p>
                    <p>
                        We\'ve been around for more than 18 years and there\'s not much that we haven\'t done so call us today to discuss your next project.
                    </p>
                </div>
            </div>
    </section>
</div>

<div class="fullwidth-row">
    <section class="featured-services-container  text-center container py-5">
        @include('frontend/components/featured-services')
    </section>
</div>
@endsection