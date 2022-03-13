# 42 North Intermediate WordPress Developer Applicant Test

- [42 North Intermediate WordPress Developer Applicant Test](#42-north-intermediate-wordpress-developer-applicant-test)
  - [Intended Outcome](#intended-outcome)
  - [Next Actions Items](#next-actions-items)
    - [Setup Local Copy of WordPress](#setup-local-copy-of-wordpress)
    - [Finish Art Projects Plugin (Create Custom Post Type and Options Page)](#finish-art-projects-plugin-create-custom-post-type-and-options-page)
    - [Assign Custom Fields](#assign-custom-fields)
      - [Post Type: Art Projects](#post-type-art-projects)
      - [Options: Art Projects](#options-art-projects)
    - [Display Art Projects in Slider](#display-art-projects-in-slider)
    - [Bonus: Fetch Slides Asynchronously via REST API](#bonus-fetch-slides-asynchronously-via-rest-api)
      - [Overview](#overview)
      - [Must-haves](#must-haves)
    - [Push Your Site and Add Jeslen as a Collaborator](#push-your-site-and-add-jeslen-as-a-collaborator)
    - [Email Jeslen When Complete](#email-jeslen-when-complete)

## Intended Outcome

We're going to simulate what a general project could be like working on one of our partner projects. This will be done with a fresh install of WordPress.

Create a new WordPress website to display art project images in a slider alongside a testimonial.

Styles aren't really important for this. For the slider, you'll need their basic CSS. Don't worry about styling this stuff. Your code is what's important since no design is being supplied. This is not a job application to be a graphic designer, even if you have decent design skills.

## Next Actions Items

- [ ] Setup Local Copy of WordPress
- [ ] Finish "Art Projects" Plugin (Create Custom Post Type and Options Page)
- [ ] Assign Custom Fields
- [ ] Display Art Projects as Slider
- [ ] Bonus: Fetch Slides Asynchronously via REST API
- [ ] Add Jeslen as a Collaborator to the Project on Flywheel
- [ ] Email Jeslen When Complete

### Setup Local Copy of WordPress

For this project, we want you to use the application called Local by Flywheel to create and host the web project. If you don't have one already, you can create a free one. If you already have an account, you can either use that or create a burner account.

Flywheel is the hosting provider. Local is a piece of software they offer to create local versions of WordPress websites. In short, it makes synchronizing your local copy with the staging/production copy super easy—including the database.

- Create an account https://app.getflywheel.com/signup
- Create a new site named `42 North Dev Test`
  - When asked to choose a plan, scroll until you see "Create a Demo Site". This is free, and will be automatically removed after 14 days.
- Download and install Local by Flywheel https://localwp.com/
- Connect to your new website and pull down to create a local copy

You're going to need Advance Custom Fields (ACF) in the next step, so you could install it now.

### Finish Art Projects Plugin (Create Custom Post Type and Options Page)

Clone this project into the plugins folder on your newly setup local WP site. Take a look at `index.php` and `lib/class.ArtProject.php`. The comments inside will help you to determine what you need to do. However, here are the basics

- Instantiate the class from the index
- Create an Art Projects custom post type within a class method
- If available, create a options sub page for your newly created custom post type using Advanced Custom Fields
- Everything (custom post type & sub options page) should use the same text domain and be namespaced

### Assign Custom Fields

If you haven't already, install the free version of the [Advanced Custom Fields plugin](https://www.advancedcustomfields.com/) plugin. Once installed, you'll create two field sets, one for the custom post type and the other for the options page.

Below is what I want you to create. Feel free to set the field names as whatever you want, but use the information below to determine the field type and label.

#### Post Type: Art Projects

- Group: Project Details
  - Number: Price
  - Select: Medium
    - Option: Digital
    - Option: Analog
  - Stylized True/False: For Sale?
    - On (Default): Yes
    - Off: No
- Group: Project Images
  - Image: Image 1
  - Image: Image 2
  - Image: Image 3
  - Image: Image 4

#### Options: Art Projects

- Group: Testimonial
  - Textarea: Quote
  - Text: Name
  - Text: Title
  - Text: Company

### Display Art Projects in Slider

Display the images from the custom fields on the Art Projects singles page in a 3 slide only slider.

- User [SwiperJS](https://swiperjs.com) as the slider
- HTML and slides should be generated with PHP
- Above the slider, display the testimonial from the sub options page

### Bonus: Fetch Slides Asynchronously via REST API

For bonus points, here's what I want you to do.

#### Overview

- Add a big ol' button that says "Fetch More Slides"
- Using JavaScript, asynchronously fetch the rest of the slides using Axios on click
- Button should replace text with `Loading...` when fetching

#### Must-haves

Now, there are some caveats for this:

- You **must** use [Axios](https://axios-http.com/) for the request
- Additional slides **must** be requested through the WP REST API
- The request **must** be asynchronous
- The request must return a value from Axios

I'll elaborate a little the last point. Requests with Axios will always return a promise. I want you to return the response from that promise into a variable outside of the promise itself when the button is clicked. Look at this example and see what I mean:

```
// fetch slides
const newSlides = Axios.(...).then(...);

// loop over newSlides
```

This example above is **not** entirely correct—it's missing the solution to this problem. It's up to you to figure out how to keep this asynchronous, but still return the value of the promise into this variable. From here, you can loop over your variable to update the slider with the additional content requested.

### Push Your Site and Add Jeslen as a Collaborator

Once you're ready to submit this project, you'll need to push your work to Flywheel using Local. Then, add jeslen@42north.ca as a collaborator on your website. This will notify me, and I'll be able to go in an check things out. I'll also be able to pull a local copy, too.

### Email Jeslen When Complete

Just to be sure, send me an email at jeslen@42north.ca to say you're done.
