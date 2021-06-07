package com.example.dacfusion.fragments

import android.os.Bundle
import android.util.Log
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Toast
import com.example.dacfusion.R
import com.example.dacfusion.model.Categorias
import com.example.dacfusion.services.CategoriasApi
import kotlinx.android.synthetic.main.activity_categorias.view.*
import kotlinx.android.synthetic.main.fragment_categorias.*
import kotlinx.android.synthetic.main.fragment_produtos.*
import okhttp3.OkHttpClient
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import java.util.concurrent.TimeUnit

// TODO: Rename parameter arguments, choose names that match
// the fragment initialization parameters, e.g. ARG_ITEM_NUMBER
private const val ARG_PARAM1 = "param1"
private const val ARG_PARAM2 = "param2"

/**
 * A simple [Fragment] subclass.
 * Use the [CategoriasFragment.newInstance] factory method to
 * create an instance of this fragment.
 */
class CategoriasFragment : Fragment() {
    // TODO: Rename and change types of parameters
    private var param1: String? = null
    private var param2: String? = null



    override fun onCreateView(inflater: LayoutInflater, container: ViewGroup?, savedInstanceState: Bundle?): View? {
         return inflater.inflate(R.layout.fragment_categorias, container, false)
    }


    companion object {

        @JvmStatic fun newInstance() =  CategoriasFragment()

    }


    override fun onResume() {
        super.onResume()
        getCategoria()
    }


    fun getCategoria(){

        val client = OkHttpClient.Builder()
            .connectTimeout(60, TimeUnit.SECONDS)
            .readTimeout(60, TimeUnit.SECONDS)
            .build()

        val retrofit =  Retrofit.Builder()
            .baseUrl("http://192.168.2.20:8000/api/")
            .addConverterFactory(GsonConverterFactory.create())
            .client(client)
            .build()

        val service = retrofit.create(CategoriasApi::class.java)
        val call = service.getCategoria()
        val callback = object: Callback<List<Categorias>> {
            override fun onFailure(call: Call<List<Categorias>>, t: Throwable) {
                Toast.makeText(context, "Api não funcionando" , Toast.LENGTH_LONG).show()
                Log.e("Categorias" , "getCategoria" , t)
            }

            override fun onResponse(call: Call<List<Categorias>>, response: Response<List<Categorias>>) {
                if (response.isSuccessful){
                    val categorias = response.body()
                    refreshUi(categorias)
                }else{
                    Toast.makeText(context, "Erro em atualizar categoria" , Toast.LENGTH_LONG).show()
                    Log.e(response.code().toString(), response.errorBody().toString())

                }
            }
        }

        call.enqueue(callback)

    }

    fun refreshUi(categorias: List<Categorias>?){

        categorias?.let {
            for(categoria in categorias){

//                val  categoriasView = layoutInflater.inflate(R.layout.activity_categorias , containerCategorias , false)


                val categoriasteste =  layoutInflater.inflate(R.layout.activity_categorias, containerProdutos, false)

                categoriasteste.txt_nome_categoria.text = categoria.nome
                containerCategorias.addView(categoriasteste)

            }
        }

    }



}