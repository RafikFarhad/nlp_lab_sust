@extends('labfront.layouts.master')
@section('content')
	<div id="k-body"><!-- content wrapper -->

		<div class="container"><!-- container -->

			{{--path to go--}}
			<div class="row"><!-- row -->
				<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

					<ol class="breadcrumb">
						<li><a href="{!!  route('labfront.index') !!}">Home</a></li>
						<li class="active">Paper</li>
					</ol>

				</div><!-- breadcrumbs end -->

			</div><!-- row end -->
			{{--path to go--}}







			<div class="row no-gutter"><!-- row -->

				<div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

					<div class="col-padded"><!-- inner custom column -->

						<div class="row gutter"><!-- row -->

							<div class="col-lg-12 col-md-12">

								<h1 class="page-title">{!! $title !!}</h1><!-- category title -->

							</div>

						</div><!-- row end -->

						<div class="row gutter"><!-- row -->

							<div class="col-lg-12 col-md-12">


								@if(! empty($papers))
									@foreach($papers as $paper)
										<div class="up-event-wrapper"><!-- event summary -->

											<h1 class="title-median"><a href="{!! route('labfront.paper_single',$paper->paper_meta_data ) !!}" title="{!! $paper->paper_title !!}">{!! $paper->paper_title !!}</a></h1>

											<div class="up-event-meta clearfix">
												<div class="up-event-date">{!! $paper->paper_type !!}</div>
												<div class="up-event-date">{!! \App\Event::fullEndDate($paper->paper_publish_date) !!}</div>
											</div>

											<p>
												{!! Str::limit($paper->paper_details,200) !!}
												<a href="{!! route('labfront.paper_single',$paper->paper_meta_data ) !!}" class="moretag" title="read more">..MORE</a>
											</p><br/>

										</div><!-- event summary end -->
									@endforeach
								@else
									<p>No Project Found on Database</p> <br/>
								@endif

							</div>

						</div><!-- row end -->



						<div class="row gutter"><!-- row -->

							<div class="col-lg-12">
								<ul class="pagination pull-right"><!-- pagination -->
									{!! $papers->render() !!}
								</ul><!-- pagination end -->
							</div>

						</div><!-- row end -->

					</div><!-- inner custom column end -->

				</div><!-- doc body wrapper end -->





				<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

					<div class="col-padded col-shaded"><!-- inner custom column -->

						<ul class="list-unstyled clear-margins"><!-- widgets -->


							<li class="widget-container widget_up_events"><!-- widget -->

								<h1 class="title-widget">Upcoming Events</h1>

								<ul class="list-unstyled">


									@foreach($event as $events)
										<li class="up-event-wrap">

											<h1 class="title-median"><a href="{!! route('labfront.event_single',$events->event_meta_data ) !!}" title="{!! Str::limit($events->event_title,20) !!}">{!! Str::limit($events->event_title,20) !!}</a></h1>

											<div class="up-event-meta clearfix">
												<div class="up-event-date">{!! \App\Event::fullDate($events->event_start) !!}</div>
												<div class="up-event-time">{!! \App\Event::fullTime($events->event_time) !!}</div>
											</div>

											<p>
												{!! Str::limit($events->event_details,100) !!}
												<a href="{!! route('labfront.event_single',$events->event_meta_data ) !!}" class="moretag" title="read more">MORE</a>
											</p>

										</li>
									@endforeach



								</ul>

							</li>


							<li class="widget-container widget_text"><!-- widget -->

								<a href="{!! route('user.create') !!}" class="custom-button cb-red" title="How to apply?">
									<i class="custom-button-icon fa fa-empire"></i>
                                    <span class="custom-button-wrap">
                                    	<span class="custom-button-title">Not a member?</span>
                                        <span class="custom-button-tagline">Become a member of our Lab!</span>
                                    </span>
									<em></em>
								</a>

							</li>



						</ul><!-- widgets end -->

					</div><!-- inner custom column end -->

				</div><!-- sidebar wrapper end -->



			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- content wrapper end -->

@endsection