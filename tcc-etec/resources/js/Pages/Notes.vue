<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-100 leading-tight">
                Anotações
            </h2>
            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffffff"><rect fill="none" height="24" width="24"/><path d="M14,11c0,0.55-0.45,1-1,1H4c-0.55,0-1-0.45-1-1s0.45-1,1-1h9C13.55,10,14,10.45,14,11z M3,7c0,0.55,0.45,1,1,1h9 c0.55,0,1-0.45,1-1s-0.45-1-1-1H4C3.45,6,3,6.45,3,7z M10,15c0-0.55-0.45-1-1-1H4c-0.55,0-1,0.45-1,1s0.45,1,1,1h5 C9.55,16,10,15.55,10,15z M18.01,12.87l0.71-0.71c0.39-0.39,1.02-0.39,1.41,0l0.71,0.71c0.39,0.39,0.39,1.02,0,1.41l-0.71,0.71 L18.01,12.87z M17.3,13.58l-5.16,5.16C12.05,18.83,12,18.95,12,19.09v1.41c0,0.28,0.22,0.5,0.5,0.5h1.41c0.13,0,0.26-0.05,0.35-0.15 l5.16-5.16L17.3,13.58z"/></svg>
        </template>
        <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

        <div class="py-12 divBack" style="min-height: 85vh;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg flex chatFundo" style="min-height: 650px; max-height: 650px;">
                    <!-- list users -->
                    <div class="w-3/12 bg-white border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <button type="submit" class="btnAdicionar text-white px-4 py-2">+ ADICIONAR NOTA</button>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 1
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 2
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer bg-blue-300 bg-opacity-25">
                                <p class="flex items-center">
                                    •Título da nota 3
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 4
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 5
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 6
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                            <li 
                                class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    •Título da nota 7
                                    <!-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> -->
                                </p>
                            </li>
                        </ul>
                    </div>

                    <!-- box messages -->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- message -->
                        <div class="w-full p-6 flex flex-col overflow-y-scroll overflow-x-hidden">
                            <div 
                                
                                class="w-full mb-3 message">
                                <p class="txtTitle inline-block p-2 rounded-md" style="max-width: 75%;">
                                    •Título da nota 3
                                </p>
                                <span class="txtMsg block mt-1 text-xs text-gray-100">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem exercitationem repudiandae ipsum tenetur rerum? Odit repellendus non explicabo expedita, ratione fugiat, facere dignissimos, voluptatum molestias corrupti dolore ut sapiente? Odit.<br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque mollitia, quibusdam accusantium iste veritatis debitis nulla voluptates laudantium quisquam qui quo illum, harum, excepturi exercitationem. Rem, fugiat. Sit, molestias amet!<br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque mollitia, quibusdam accusantium iste veritatis debitis nulla voluptates laudantium quisquam qui quo illum, harum, excepturi exercitationem. Rem, fugiat. Sit, molestias amet!<br>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque mollitia, quibusdam accusantium iste veritatis debitis nulla voluptates laudantium quisquam qui quo illum, harum, excepturi exercitationem. Rem, fugiat. Sit, molestias amet!</span>

                                <!-- <span class="block mt-1 text-xs text-gray-500">{{message.created_at | formatDate}}</span> -->
                            </div>
                        </div>
                        <!-- message end -->

                        <!-- form -->
                        <div class="w-full p-6 border-t border-gray-200">
                            <form>
                                <div class="flex rounded-md overflow-hidden justify-end">
                                    <button class="btnEnviar text-white px-4 py-2">X EXCLUIR NOTA</button>
                                </div>
                            </form>
                        </div>
                        <!-- form end -->
                    </div>
                    <!-- box messages end -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },
    })
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}
.txtTitle{
    font-size: 1.5em;
    color: #3766DD;
}
.txtMsg{
    font-size: 1em;
    line-height: 30px;
    color: #333;
}
.messageFromMe{
    background-color: #71A8C6;
}
.messageToMe{
    background-color: #BED9EA;
}
.chatFundo{
    /* background: #2c324d; */
background: rgb(59,65,97);
background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}
.btnEnviar{
    background: #3766DD;
    transition: 0.3s;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
}
.btnAdicionar{
    background: #3766DD;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8em;
    transition: 0.3s;
}
.btnAdicionar:hover{
    background: #62b640;
    letter-spacing: 1px;
}
.btnEnviar:hover{
    background: #f04646;
    letter-spacing: 1px;
}
.message{
    color: rgb(15, 21, 48);
    font-weight: 600;
}
.divBack{
    background: #e0e0e0;
}
</style>
