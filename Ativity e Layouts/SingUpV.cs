using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using Android.App;
using Android.Content;
using Android.OS;
using Android.Runtime;
using Android.Views;
using Android.Widget;

namespace AppAlfa
{
    [Activity(Label = "SingUpV")]
    public class SingUpV : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingUpV);
            //-----------------
            Button Reginaldo = FindViewById<Button>(Resource.Id.Reg);
            EditText Nome = FindViewById<EditText>(Resource.Id.RegNome);
            EditText Email = FindViewById<EditText>(Resource.Id.RegEmail);
            EditText Senha = FindViewById<EditText>(Resource.Id.RegSenha);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
            Reginaldo.Click += delegate {
                if (Senha.Text.Length == 8)
                {
                    //avisozinho
                    base.OnCreate(savedInstanceState);
                    Android.App.AlertDialog.Builder didi = new AlertDialog.Builder(this);
                    didi.SetTitle("AvisoBoladao");
                    didi.SetMessage("Boa zero meia, vc tah registrado");
                    didi.SetNegativeButton("is we", (c, ev) => {
                    });
                    didi.Show();
                    //----------
                    //Rodar Nova Pagina
                    SetContentView(Resource.Layout.PagAlunoV);
                    Intent Intent = new Intent(this, typeof(PagAlunoV));
                    StartActivity(Intent);
                    //----------
                }
                else {
                    base.OnCreate(savedInstanceState);
                    Android.App.AlertDialog.Builder dialog = new AlertDialog.Builder(this);
                    dialog.SetTitle("AvisoBoladao");
                    dialog.SetMessage("Mano a senha n tem 8 digitos");
                    dialog.SetNegativeButton("beleza", (c, ev) => {
                    });
                    dialog.Show();
                }

            };

            }
    }
}