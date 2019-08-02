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
    [Activity(Label = "GeradorDeId")]
    public class GeradorDeId : Activity
    {
        public int ultima;
        public string[] gerados = new string[] {};
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.GeradorDeId);
            //-------
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate {
                SetContentView(Resource.Layout.PagDoProfessor);
                Intent Intent = new Intent(this, typeof(HomeFessor));
                StartActivity(Intent);
            };
            Button botao = FindViewById<Button>(Resource.Id.BotaoGerar);
            botao.Click += delegate {
                //Gerar();
            };
        }

        //private void Gerar()
        //{
        //    ultima++;
        //    gerados[ultima] = ("id00"+ultima);
        //    TextView resultadinho = FindViewById<TextView>(Resource.Id.Resultado);
        //    resultadinho.Text = ("Id Da Mat: " + gerados[ultima]);
        //}
        
    }
}