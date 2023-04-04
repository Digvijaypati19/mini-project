const mobile_queue = document.querySelector(".mobile-queue-list");

const active_btn = document.querySelector(".container");

const toggleQueue = () => {
    active_btn.classList.toggle("active");
};

mobile_queue.addEventListener('click' , () => toggleQueue());