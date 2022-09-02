<x-layout title="Novo Game">
 <form  action="{{route('games.store')}}" method="post">
     @csrf
     <div class="mb-3">
     <label for="nome" class="form-label"> Nome do Game</label>
     <input type="text" id="nome" name="nome" class="form-control">
     </div>
     <div class="mb-3">
         <label for="plataforma" class="form-label">Plataforma</label>
         <select name="plataforma" class="form-select" id-="plataforma">
             <option selected> Selecione a plataforma </option>
             <option value="PS1">PS1</option>
             <option value="PS2">PS2</option>
             <option value="PS3">PS3</option>
             <option value="PS4">PS4</option>
             <option value="PS5">PS5</option>
             <option value="Xbox">Xbox</option>
             <option value="Xbox360">Xbox360</option>
             <option value="XboxOne">XboxOne</option>
             <option value="Pc">Pc</option>
         </select>
         </select>
     </div>
     <button type="submit" class="bnt btn-primary">Salvar</button>
 </form>

</x-layout>
