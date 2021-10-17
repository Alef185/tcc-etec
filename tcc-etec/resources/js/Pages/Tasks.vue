<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                Tarefas
            </h2>
        </template>
        <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
        <div class="py-12 divBack" style="min-height: 85vh;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="divAdd flex justify-between pt-5 pb-5 pr-7 pl-7 rounded-t-lg">
                    <div>
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="color: white;">Minhas tarefas</h1>
                    </div>
                    <div>
                        <button class="btnAdd content-center align-middle font-semibold py-2 px-4 rounded-full">
                        + Adicionar nova tarefa
                        </button>
                    </div>
                    
                </div>
                <div class="bg-white overflow-y-scroll overflow-x-hidden shadow-xl sm:rounded-lg" style="min-height: 550px; max-height: 550px;">
                    
                    <!-- teste de lista -->
                    <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8" >
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Prioridade
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">
                                    Prazo
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Editar</span>
                                </th>
                                </tr>
                            </thead>
                     
                            <tbody class="divTask bg-red divide-y divide-gray-400">
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 line-through">
                                        Tarefa 1 - Criação de Controllers
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Alta
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>

                     
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        Tarefa 2 - Listagem de usuários
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Média
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        Tarefa 3 - Permissões
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Baixa
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>
                                <!-- duplo -->
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900  line-through">
                                        Tarefa 4 - Implementação
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Alta
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>

                     
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 line-through">
                                        Tarefa 5 - Listagem de Mensagens
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Média
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        Tarefa 6 - Crud NoteBlock
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Baixa
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>

                                <!-- duplo -->
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900  line-through">
                                        Tarefa 7 - Criação do Chat
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Alta
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>

                     
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        Tarefa 8 - Rotas do PageController
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Média
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://img.icons8.com/color/48/000000/task--v1.png" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 line-through">
                                        Tarefa 9 - Design do App
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox" checked>
                                        <span class="ml-2 text-sm text-gray-900">Conclúido</span>
                                    </label>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Baixa
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    12/10/2021
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                </tr>
  

                            </tbody>
                            </table>
                        </div>
                        </div>

                    </div>
                    </div>

                    <!-- fim teste de lista -->
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
.divTask{
    background: #e0e0e0;
    background: linear-gradient(180deg,rgb(255, 255, 255) 0%, #e0e0e0 100%);
}
.btnAdd{
    background: #3766DD;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1em;
    transition: 0.3s;
    color: #fff;
}
.btnAdd:hover{
    background: #62b640;
    letter-spacing: 1px;
}
.divAdd{
    background: #222629;
}
.divBack{
    background: #e0e0e0;
}
</style>
