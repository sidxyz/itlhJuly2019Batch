@extends('layout.master')


@section('body')
    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
	<!---728x90--->

    <!-- contact -->
    <section class="contact-wthree align-w3" id="contact">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">contact us
                </h4>
                <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                    out and
                    make it more readable.</p>
            </div>
            <div class="mx-auto text-center">
                <iframe class="mt-lg-4 contact-form-wthreelayouts" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197"
                    allowfullscreen></iframe>
                <!-- //footer right -->
            </div>
            <div class="row mt-4">
                <div class="col-lg-7">
                    <h5 class="cont-form">send us a note</h5>
                    <div class="contact-form-wthreelayouts">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="Johnson" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-w3layouts btn-block  bg-theme text-wh w-100 font-weight-bold text-uppercase">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form">get in touch</h5>
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">info@example1.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">info@example2.com</a>
                                <a href="mailto:example@email.com">info@example3.com</a>
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3"></span>
                            <div class="d-flex flex-column">
                                <p>+456 123 7890</p>
                                <p class="my-1">+456 123 7890</p>
                                <p>+856 123 7890</p>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3"></span>
                            <address>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection  