<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1">
	<style>
		@import url('css/text_styles.css');
        body{
        	background-color: #2fa8ec;
        	background-repeat: repeat-y;
        }
    </style>
</head>
<body>
<div class="container">
<section class="content bgcolor-6">
				<h2> Add </h2>
				<form action="addition.php" method="post" autocomplete="off">
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" id="input-28" name="ITRANS"/>
					<label class="input__label input__label--juro" for="input-28">
						<span class="input__label-content input__label-content--juro">ITRANS</span>
					</label>
				</span>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" id="input-29" name="English"/>
					<label class="input__label input__label--juro" for="input-29">
						<span class="input__label-content input__label-content--juro">ENGLISH</span>
					</label>
				</span><br>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" id="input-30" name="Example_e"/>
					<label class="input__label input__label--juro" for="input-30">
						<span class="input__label-content input__label-content--juro">Example(Eng)</span>
					</label>
				</span><br>
				<span class="input input--juro">
					<input class="input__field input__field--juro" type="text" id="input-30" name="Example_h"/>
					<label class="input__label input__label--juro" for="input-30">
						<span class="input__label-content input__label-content--juro">Example(Hin)</span>
					</label><br>
				</span>
				<div class="btn1">
					<input type="submit" value="Add to list" class="add_btn" name="submit"> 
				</div>
			</form>
				<div>
					<form action="index.php" method="post">
<input type="submit" name="submit" class="btn" value="Back to Menu">
</form>
				</div>
				
			</section>
</div>
<script src="js/text_styles.js"></script>
<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>

</body>