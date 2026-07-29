import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PeruPageRoutingModule } from './peru-routing.module';

import { PeruPage } from './peru.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PeruPageRoutingModule
  ],
  declarations: [PeruPage]
})
export class PeruPageModule {}
