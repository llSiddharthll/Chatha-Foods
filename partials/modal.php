
<style>

@property --a{
    syntax: '<angle>';
    initial-value: 0deg;
    inherits: true;
}
    .modal-box-1 {
    position: absolute;
    left: 50%;
    top: 50%; /* Needed for vertical centering */
    transform: translate(-50%, -50%);
    background: repeating-conic-gradient(from var(--a), red 0%, red 5%, transparent 5%, transparent 40%, red 50%);
    animation: rotateBorder 4s linear infinite;
    border-radius: 1.5rem; /* Tailwind's rounded-3xl = 24px */
    display: flex;
    flex-direction: column;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

    .modal-box-2 {
    position: absolute;
    left: 50%;
    top: 50%; /* Needed for vertical centering */
    transform: translate(-50%, -50%);
    background-image: url(https://images.unsplash.com/photo-1617713964959-d9a36bbc7b52?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
    border-radius: 1.5rem; /* Tailwind's rounded-3xl = 24px */
    display: flex;
    flex-direction: column;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
}


/* Media query for md:flex-row (responsive switch from column to row) */
@media (min-width: 768px) {
    .modal-box-1 {
        flex-direction: row;
    }
        .modal-box-2 {
        flex-direction: row;
    }
}

.modal-image{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 20px 0 0 20px;
}

@keyframes rotateBorder {
    0%{
        --a: 0deg;
    }
    100%{
        --a: 360deg;
    }
}

</style>

<div id="foodModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="relative">
        <div
        class="overflow-hidden relative rounded-3xl" style="height: 55vh; width: 82vw; z-index: 100">
            <div
        class=" modal-box-1 rounded-3xl" style="height: 55vh; width: 85vw; z-index: 100">
                <!--<div class="w-1/2 h-full bg-white"></div>-->
                <!--<div class="w-1/2 h-full bg-red-500"></div>-->
            </div>
        </div>
    <div id="modal-content"
        class="modal-box-2 " style=" z-index: 200 ;height: 53vh; width: 81vw;">
        
        <span onclick="closeModal()" class="absolute top-4 right-6 text-3xl text-red-500 cursor-pointer">
            <i class="fa-solid fa-xmark"></i>
        </span>

        <div class="md:w-1/2">
            <img id="modal-image" class="modal-image" src="" alt="Food Image">
        </div>

        <div style="width: 50%; padding: 2rem; display: flex; flex-direction: column; gap: 1rem; overflow-y: auto;">
            <h3 id="modal-title" style="color: #ef4444; font-size: 2.5rem; font-weight: 600;"></h3>
            <p id="modal-intro" style="color: #374151; font-size: 1.5rem; line-height: 1.5;"></p>
            <ul id="modal-points" style="font-size: 1.3rem; color: #4b5563;"></ul>
        </div>
    </div>
    </div>
    
</div>