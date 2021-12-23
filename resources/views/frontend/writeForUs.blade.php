@extends('layout.frontend')
@section('content')
    <section class="bg-banner">
        <img src="{{ url('/storage/banner/hill.jpg') }}" alt="Image Not Found" height="250px" width="100%">
    </section>

    <section class="se-001">
        <div class="container">
            <div class="row">
                <p style="text-align: justify; margin-top: 20px; padding:0px 10px 0px 10px;">
                    <strong> YFD Blog </strong> is an initiative of Youth in Federal Discourse (YFD) to foster reading and
                    writing culture among the youth in regards to federalism,
                    government policies and, laws of Nepal. We post the opinions from the youths regarding the issues
                    related to the subject matter.
                    If you want the world to acknowledge your ideas, don’t hesitate to share your idea with us. Send us your
                    writing in compliance with our guidelines
                    below on <strong> yfdblogs@gmail.com </strong>. Once your idea gets approved by our editors, they will
                    contact to your via email.

                </p>
            </div>
        </div>
    </section>

    <section class="bg-01-1a">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                <h3 style="text-align: center;">Guidelines</h3> <br>
                <p>Please follow the instructions below for submissions. Only those submissions that meet these criteria
                    will be considered for publishing.
                </p> <br>
                <div class="accordion_one">
                    <div class="panel-group" id="accordionFourLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion_oneLeft"
                                        href="#collapseFiveLeftone" aria-expanded="false" class="collapsed"> Theme </a>
                                </h4>
                            </div>
                            <div id="collapseFiveLeftone" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p> Writings on federalism, governance, laws and policies are accepted. </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#collapseFiveLeftTwo" aria-expanded="false">
                                        Length </a> </h4>
                            </div>
                            <div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>The writings should range between 800 - 1800 words.</p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree"
                                        aria-expanded="false"> Authorship </a> </h4>
                            </div>
                            <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false"
                                role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p> Co-authorship of up to two authors is accepted.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#one" aria-expanded="false"> Format </a>
                                </h4>
                            </div>
                            <div id="one" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p> All submissions must be in the [.doc] or [.docx] format. The font should be in
                                            Times New. </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#two" aria-expanded="false"> Roman or Mangal
                                    </a> </h4>
                            </div>
                            <div id="two" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            Font size 12 and 1.5 line spacing.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#three" aria-expanded="false"> Language </a>
                                </h4>
                            </div>
                            <div id="three" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            Submissions should be either in English or in Nepali language.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#four" aria-expanded="false"> Citation </a>
                                </h4>
                            </div>
                            <div id="four" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            Please cite sources to support your arguments and use hyperlink for
                                            acknowledging the sources. Also, please provide keywords that
                                            describe the article, at the beginning of the article.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#five" aria-expanded="false"> Originality
                                    </a> </h4>
                            </div>
                            <div id="five" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            The submissions must be original and should not have been published elsewhere
                                            before. All submissions will be verified for originality
                                            and plagiarism in any form will lead to their rejection.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#six" aria-expanded="false"> Author’s bio
                                    </a> </h4>
                            </div>
                            <div id="six" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            TAt the end of the submitted article, please include a short, single sentence
                                            bio-line in second person that reflects either your
                                            professional or academic qualification. Please attach a high resolution headshot
                                            along with the submission e-mail. Something along the lines of the
                                            digital version of a passport-like photograph works best.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#seven" aria-expanded="false"> Avoid </a>
                                </h4>
                            </div>
                            <div id="seven" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            The writings should not cross legal boundaries, or should not motivate to libel
                                            and defamation. Discrimination or stereotype of any kind
                                            should be strictly avoided.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#eight" aria-expanded="false"> Opinion
                                        Disclaimer </a> </h4>
                            </div>
                            <div id="eight" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            The author ought to add a disclaimer statement at the end of the writing. Kindly
                                            use the statement, “The opinions expressed
                                            in the article solely belong to the author and do not necessarily represent the
                                            official opinion of Youth in Federal Discourse (YFD). YFD is only
                                            providing a platform for youths to express their opinions about federalism,
                                            government policies and, laws of Nepal.”
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#nine" aria-expanded="false"> Deadline </a>
                                </h4>
                            </div>
                            <div id="nine" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            There is no submission deadline. Submissions are accepted on a rolling basis.
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                        data-parent="#accordion_oneLeft" href="#ten" aria-expanded="false"> How to submit
                                    </a> </h4>
                            </div>
                            <div id="ten" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    {{-- <div class="img-accordion"> <img
                                                src="https://img.icons8.com/color/81/000000/person-female.png" alt="">
                                        </div> --}}
                                    <div class="text-accordion">
                                        <p>
                                            All the submissions are to be sent to <strong>yfdblogs@gmail.com</strong>
                                        </p>
                                    </div>
                                </div> <!-- end of panel-body -->
                            </div>
                        </div> <!-- /.panel-default -->

                    </div>
                    <!--end of /.panel-group-->
                </div>
            </div>
        </div>
    </section>

    <section class="se-001">
        <div class="container">
            <h2 style="text-align: center">Notice</h2> <br>
            <div class="row">
                <p style="text-align: justify; margin: 0px 20px 0px 20px;">
                    We reserve the right to make any edits necessary to meet our standards of quality, length, and style.
                    Changes and standards will be enforced once
                    the submission is made. Submission once approved and, published, the author will be notified via email.
                    You can check the articles on YFD Blog
                    and further, it will be published through our Youth in Federal Discourse Facebook page. If the author is
                    not notified within 20 days of submission,
                    the author can submit it to other platforms.
                </p>
            </div>
        </div>
    </section>
    <section>
        <h4 style="text-align: center; margin-bottom: 20px;">Happy reading and Writing !!</h4>
    </section>
@endsection
