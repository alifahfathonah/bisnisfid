		</div>
		<script>
			
			CKEDITOR.replace( 'editor1', {
		    extraPlugins: 'embed,autoembed,image2',
			height: 500,

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
			// Setup content provider. See https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_media_embed
			embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true
		
		} );
		</script>	
		<script>
			
			CKEDITOR.replace( 'ayam35', {
		    extraPlugins: 'embed,autoembed,image2',
			height: 500,

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
			// Setup content provider. See https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_media_embed
			embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true
		
		} );
		</script>
		
		<script>
			
			CKEDITOR.replace( 'ayam36', {
		    extraPlugins: 'embed,autoembed,image2',
			height: 500,

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
			// Setup content provider. See https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_media_embed
			embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true
		
		} );
		</script>
		<script>
			
			CKEDITOR.replace( 'ayam<?php echo $data['id']; ?>', {
		    extraPlugins: 'embed,autoembed,image2',
			height: 500,

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
			// Setup content provider. See https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_media_embed
			embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true
		
		} );
		</script>
	</body>
</html>