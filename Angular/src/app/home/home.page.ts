import { Component } from '@angular/core';
import { AuthenticateService } from '../shared/services/auth.service';
import { CrudService } from '../shared/services/crud.service';
import { Storage, getDownloadURL, ref, uploadBytesResumable } from '@angular/fire/storage';
import { MessageService } from '../shared/services/message.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  pokemon:any = {
    nome: null,
    poder: null
  };

  constructor( 
    public crudService: CrudService
  ){ }

  enviar() {
    this.crudService.insert(this.pokemon, 'pokemons');
  }

}
