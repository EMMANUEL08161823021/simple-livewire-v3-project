<?php
$image_url = 'https://img.freepik.com/premium-photo/top-view-delicious-ice-cream-cones-with-topping_23-2148425366.jpg?w=900';
?>
<style>
    .background-image {
        position: relative;
        background-image: url('<?php echo $image_url; ?>');
        background-color: rgba(5, 4, 4, 1);
        /* opacity: 0.92; */
        /* Additional CSS properties for the background */
        background-size: cover;
        background-position: center;
        /* Set height or width to display the background */
        height: 100vh; /* Example height */
        z-index: 20;
        display: flex;
        justify-content: center;
        gap: 15px;
        align-items: center;
    }
    .background-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity by changing the last value */
        z-index: 1;
    }
    .buttons {
        width: 90%;
        margin: 20px auto
    }
    /* h1 {
        font-size: 4rem;
        line-height: 50px;
    } */
</style>
<div>
    <div class="background-image flex-col justify-center items-center">
        <h1 class=" text-white z-30 text-2xl md:text-6xl text-center font-bold">Chocolate Fudge Brownie</h1>
        <div class="flex gap-4 z-10">
            <x-icon name="star" class="w-10 h-10 p-1 bg-white border-2 rounded-full" solid />
            <x-icon name="star" class="w-10 h-10 p-1 bg-white border-2 rounded-full" solid />
            <x-icon name="star" class="w-10 h-10 p-1 bg-white border-2 rounded-full" solid />
            <x-icon name="star" class="w-10 h-10 p-1 bg-white border-2 rounded-full" solid />
            <x-icon name="star" class="w-10 h-10 p-1 bg-white border-2 rounded-full" solid />
        </div>
        <h3 class="z-10 bg-black text-white p-2 text-center">The Chocolate Fudge Brownie is a delectable dessert that combines rich chocolate flavor with indulgent chunks of fudge brownie.</h3>
        <div class="flex flex-col gap-4 font-bold z-10 text-white">
            <span><span class="text-white p-2 border-2 bg-black">Open:</span> 10:00 AM - 10:00 PM </span>

            <p> Hours updated 2 months ago</p>
        </div>
        <x-button class="text-xs md:text-sm font-bold z-10" red label="Order Now!"/>
    </div>
      
   
    <div class="hidden buttons gap-4 border-2">
        <x-button red label="Write a review"/>
        <x-button label='Add a photo'/>
        <x-button label='Share'/>
        <x-button label='Save'/>
    </div>
</div>