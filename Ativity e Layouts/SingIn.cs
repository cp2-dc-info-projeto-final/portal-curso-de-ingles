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
    [Activity(Label = "SingIn")]
    public class SingIn : Activity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            SetContentView(Resource.Layout.SingIn);
            Button Voltar = FindViewById<Button>(Resource.Id.Voltar);
            Voltar.Click += delegate
            {
                SetContentView(Resource.Layout.activity_main);
                Intent Intent = new Intent(this, typeof(MainActivity));
                StartActivity(Intent);
            };
                Button Log = FindViewById<Button>(Resource.Id.Log);
            Log.Click += delegate
            {
                    SetContentView(Resource.Layout.PagDoProfessor);
                    Intent Intent = new Intent(this, typeof(HomeFessor));
                    StartActivity(Intent);
            }; 
        }
    }
}