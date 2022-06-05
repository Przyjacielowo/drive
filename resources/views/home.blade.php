@extends('layouts.app')

@section('content')

<div class="margin-content-wraper content-wrapper">
	<div class="folder_container">
		<a href="#">
			<div class="folder_icon">
				<i class="fa-solid fa-folder-open fa-10x"></i>
			</div>
			<div>
				Nazwa folderu
			</div>
		</a>
	</div>
	<div class="folder_container">
		<a href="#">
			<div class="folder_icon">
				<i class="fa-solid fa-folder-open fa-10x"></i>
			</div>
			<div>
				1242356t3 htbeihonsdpcjfgbasipodbshedfp
			</div>
		</a>
	</div>

	
	
	
	
	
	<!-- <div class="images_container">
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div> -->



			<!-- <div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card card-primary">
								<div class="card-header">
									<h4 class="card-title">FilterizR Gallery with Ekko Lightbox</h4>
								</div>
								<div class="card-body">

								<div>
									<div class="filter-container p-0 row" style="padding: 3px; position: relative; width: 100%; display: flex; flex-wrap: wrap; height: 279px;">
										<div class="filtr-item col-sm-2 filteredOut" data-category="1" data-sort="white sample" style="opacity: 0; transform: scale(0.5) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; z-index: -1000; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white">
										<img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
										<img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(145px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
										<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(290px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
										<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(435px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
										<img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2 filteredOut" data-category="1" data-sort="white sample" style="opacity: 0; transform: scale(0.5) translate3d(257px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; z-index: -1000; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
										<img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2 filteredOut" data-category="1" data-sort="white sample" style="opacity: 0; transform: scale(0.5) translate3d(514px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; z-index: -1000; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
										<img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(580px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
										<img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample" style="opacity: 1; transform: scale(1) translate3d(725px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
										<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2 filteredOut" data-category="1" data-sort="white sample" style="opacity: 0; transform: scale(0.5) translate3d(771px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; z-index: -1000; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
										<img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2 filteredOut" data-category="1" data-sort="white sample" style="opacity: 0; transform: scale(0.5) translate3d(1028px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; z-index: -1000; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
										<img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample" style="opacity: 1; transform: scale(1) translate3d(0px, 138px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; width: 141.5px; transition: all 0.5s ease-out 0ms, width 1ms ease 0s;">
										<a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
										<img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										</div>
										</div>
									</div>
								</div>
							</div>
								<div class="col-12">
								<div class="card card-primary">
								<div class="card-header">
								<h4 class="card-title">Ekko Lightbox</h4>
								</div>
								<div class="card-body">
								<div class="row">
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample">
										</a>
										</div>
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample">
										</a>
										</div>
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample">
										</a>
										</div>
										<div class="col-sm-2">
										<a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
										<img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample">
										</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample">
											</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample">
											</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample">
											</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample">
											</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample">
											</a>
										</div>
										<div class="col-sm-2">
											<a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
												<img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->















			<!-- <div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div>
			<div class="image_container">
				<div class="image">
					<img src="https://www.sony.pl/image/bc6d25fa6371c2899ce704a2bed7614c?fmt=png-alpha&wid=960">
				</div>
				<div class="image_name">
					<span>DSC00212.JPG</span>
				</div>
				<div class="image_delete">
						<i class="fa-solid fa-trash-can"></i>
				</div>
			</div> -->
		</div>


	</div>

    
@endsection
