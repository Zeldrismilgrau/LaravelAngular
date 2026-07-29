import { ComponentFixture, TestBed } from '@angular/core/testing';
import { PeruPage } from './peru.page';

describe('PeruPage', () => {
  let component: PeruPage;
  let fixture: ComponentFixture<PeruPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(PeruPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
