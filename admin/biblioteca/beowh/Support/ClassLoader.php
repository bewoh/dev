<?php
namespace beowh;

class ClassLoader {

	/**
	 * Registra os diretórios da aplicação
	 *
	 * @var array
	 */
	protected static $directories = array();

	/**
	 * Indica se o arquivo foi carregado
	 *
	 * @var bool
	 */
	protected static $registered = false;

	/**
	 * Carrega os arquivos
	 *
	 * @param  string  $class
	 * @return void
	 */
	public static function load($class)
	{
		$class = static::normalizeClass($class);

		foreach (static::$directories as $directory)
		{
			if (file_exists($path = $directory.DIRECTORY_SEPARATOR.$class))
			{
				require_once $path;

				return true;
			}
		}
	}

	/**
	 * Obtém o nome após realizar um filtro
	 *
	 * @param  string  $class
	 * @return string
	 */
	public static function normalizeClass($class)
	{
		if ($class[0] == '\\') $class = substr($class, 1);

		return str_replace(array('\\', '_'), DIRECTORY_SEPARATOR, $class).'.php';
	}

	/**
	 * A chamar o método é registrado o arquivo e a estancia já pode esr chamada
	 *
	 * @return void
	 */
	public static function register()
	{
		if ( ! static::$registered)
		{
			static::$registered = spl_autoload_register(array('\beowh\ClassLoader', 'load'));
		}
	}

	/**
	 * Método responsável por adicionar os diretorios
	 *
	 * @param  string|array  $directories
	 * @return void
	 */
	public static function addDirectories($directories)
	{
		static::$directories = array_merge(static::$directories, (array) $directories);

		static::$directories = array_unique(static::$directories);
	}

	/**
	 * Retira diretorios adicionados 
	 *
	 * @param  string|array  $directories
	 * @return void
	 */
	public static function removeDirectories($directories = null)
	{
		if (is_null($directories))
		{
			static::$directories = array();
		}
		else
		{
			$directories = (array) $directories;

			static::$directories = array_filter(static::$directories, function($directory) use ($directories)
			{
				return ( ! in_array($directory, $directories));
			});
		}
	}

	/**
	 * Retorna todos os diretorios e arquivos chamados
	 *
	 * @return array
	 */
	public static function getDirectories()
	{
		return static::$directories;
	}

}
