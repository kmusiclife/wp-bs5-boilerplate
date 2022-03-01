module.exports = (env, argv) => {
  return {
    settings: {
      // Move files to the trash instead of deleting them directly, when using the
      // "recreate" or "remove" argument
      useTrash: false
    },
    collections: [
      // Slider Images 1
      {
        /* A name to identify the collection */
        name: "Mainimage",
        source: "../dist/images/mainimage",
        recursive: false,
        sizes: [
          {
            name: "md Resolution",
            width: 1200,
            height: 630,
            /*
             * Define the method by which the image should fit (default: cover)
             *
             *   cover:     Crop to cover both provided dimensions.
             *   contain:   Embed within both provided dimensions.
             *   fill:      Ignore the aspect ratio of the input and stretch to both provided dimensions.
             *   inside:    Preserving aspect ratio, resize the image to be as large as possible while
             *              ensuring its dimensions are less than or equal to both those specified.
             *   outside:   Preserving aspect ratio, resize the image to be as small as possible while
             *              ensuring its dimensions are greater than or equal to both those specified.
             */
            fit: "cover",
            /*
             * Define the position When using a fit of "cover" or "contain" (default: center).
             *
             *   left
             *   right
             *   top
             *   bottom
             *   center
             *   left top
             *   right top
             *   left bottom
             *   right bottom
             */
            position: "center"
          },
          {
            name: "sm Resolution",
            width: 600,
            height: 630
          }
        ]
      }
    ]
  };
};