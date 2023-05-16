{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style>  
html {
    font-size: 100%; }

/* From the :root element you can easily change the colors of the design, its size and so on. */
:root {

  /* You can change the font family in the whole design here. (You need to add the font family to the codes.) */
  --font-family: 'Inter', sans-serif;

  /* You can change the font size here, is proportional to all texts. */
  --font-size: 16px;

  /* You can change the background color by typing the color code. (If you do not enter a background-image image, the background-color will be active.) */
  --background-color: #000;
  --background-image: url({{themeAsset('../../wallpaper.png')}});

  /* You can change the frame thickness and color of the picture by typing the number of pixels and the color code. */
  --image-border-color: #1f232e;
  --image-border-px: 3px;

  /* You can change the width and size of the picture by typing the number of pixels. */
  --image-width: 140px;
  --image-height: 140px;

  /* You can change the colors of the title and description section by typing the color codes. */
  --title-color: #fff;
  --description-color: #fff;

  /* You can change the colors of social media icons by changing the color code. */
  --svg-color: #fff;

  /* You can change the background, text color and active color of the menu by changing the color codes. */
  --menu-background-color: #1f232e;
  --menu-text-color: #fff;
  --menu-active-text-color: #8ecae6;

  /* You can change the button's background, text color and active color by changing the color codes. */
  --button-background-color: #1f232e;
  --button-text-color: #fff;
  --button-text-hover-color: #8ecae6;

  /* You can change the background, text color and active color of the text field by changing the color codes. */
  --textarea-background-color: #1f232e;
  --textarea-text-color: #fff;
  --textarea-link-text-color: #8ecae6;

  /* You can change the background, text color and active color of the footer area by changing the color codes. */
  --footer-background-color: #1f232e;
  --footer-text-color: #fff;
  --footer-link-text-color: #8ecae6;
}
</style>